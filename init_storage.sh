#!/bin/sh
# Create required storage subdirectories and set permissions for OpenCart on Render
mkdir -p storage/logs storage/cache storage/download storage/session storage/upload
chmod -R 777 storage
