---
title: Compress Images Using AWS Lambda and S3
categories: Development,AWS
summary: Compressing large images not only helps reduce bandwidth, but it also helps with SEO.  Learn how we compress images automatically for optimal results.
preview_image:
preview_image_twitter:
hidden: true
published: 11/17/21
---

Loading large image files on your webiste is not only bandwidth intensive but it also negatively affects SEO.  You can use software such as Adobe Photoshop to manually compress your images before storing them but that's a time consuming process so why not do this automatically. In this blog I will show you how you can use AWS Lambda and Amazon S3 to automatically compress images that have been uploaded to an S3 bucket and display them in your Laravel application.


## Prerequisites
For this demo you will need the following:
* An AWS Account

## Create the IAM Policy & Role

