# API server

**Notice**: Previously, the waifuchain API was served by a PHP server (hosted on a VPS), but we ended up migrating it to AWS Lambda to make it more scalable and cheaper. This repository houses both the first server as well as the scripts used on AWS Lambda.

## AWS Lambda
Setup instructions:
1. Create a S3 bucket with all the waifu images
2. Set up CloudFront to serve the waifu images in the S3 bucket from `images.waifuchain.moe`
3. Set up a Lambda function (the 128MB type) using the scripts in the `lambda` directory
4. Set up the API gateway to trigger the lambda function on REST requests to `api.waifuchain.moe`

## Node.js server (deprecated)
Requires a working relational database set up following the instructions in [scrapper](https://github.com/thewaifuproject/scrapper).  
 Once this has been set up, just deploy all the files inside the `server` directory into a LAMP server.
