#! /usr/bin/env python3
# cielo challenge

import sys
import argparse as ap
import requests
import csv
import json


class RESTClient:
    def __init__(self):
        self.response = RESTResponse()

    def get(self, uri, output):
        try:
            r = requests.get(uri)
            r.raise_for_status()
            self.response.write(r, output)
        except requests.exceptions.RequestException as e:
            print(e)
            sys.exit(1)

    def post(self, uri, data, output):
        try:
            r = requests.post(uri, data=data)
            r.raise_for_status()
            self.response.write(r, output)
        except requests.exceptions.RequestException as e:
            print(e)
            sys.exit(1)


class RESTRequest:
    def __init__(self):
        self.client = RESTClient()

    def request(self, method, uri, data, output):
        # always send requests as 'GET' and 'POST'
        method = method.upper()
        if method == 'GET':
            self.client.get('https://jsonplaceholder.typicode.com' + uri, output)
        elif method == 'POST':
            self.client.post('https://jsonplaceholder.typicode.com' + uri, data, output)


class RESTResponse:
    def write(self, json_response, output):
        # output to JSON file
        if output is not None and output.endswith('.json'):
            response = json_response.json()
            json_file = open(output, 'w')
            print(json_response.status_code)
            print(json.dumps(response, indent=4), file=json_file)
            json_file.close()
        # output to CSV
        elif output is not None and output.endswith('.csv'):
            response = json_response.json()
            output_file = open(output, 'w', newline='')
            output = csv.writer(output_file)
            output.writerow(response[0].keys())
            for row in response:
                output.writerow(row.values())
            output_file.close()
        # output to stdout
        else:
            print(json_response.status_code)
            print(json_response.text)


# create parser with description
parser = ap.ArgumentParser(description="Test")

# add arguments from spec
parser.add_argument('method', metavar='{get, post}', type=str, help='Request method')
parser.add_argument('uri_fragment', metavar='endpoint', type=str, help='Request endpoint URI fragment')
parser.add_argument('-d', '--data', required=False, action='store', help='Data to send with request')
parser.add_argument('-o', '--output', required=False, action='store',
                    help='Output to .json or .csv file (default: dump to stdout)')

# parse all arguments
cli_args = parser.parse_args()

# create a Request obj and make a request
test_request = RESTRequest()
test_request.request(cli_args.method, cli_args.uri_fragment, cli_args.data, cli_args.output)
