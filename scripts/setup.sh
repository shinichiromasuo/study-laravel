#!/bin/bash

SCRIPT_DIR=$(cd $(dirname $0); pwd)

cd $SCRIPT_DIR

cp -f config/.laradock-env ../laradock-study_laravel/.env
