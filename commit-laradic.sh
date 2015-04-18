#!/bin/bash

export PACKAGE="${1}"
MESSAGE="${2}"

PACKAGE_NAME=$(php -r 'echo ucfirst(getenv("PACKAGE"));')

if [[ ! -z "$1" && ! -z "$2" ]]; then
    cd "/mnt/safe/laradic/workspace/Laradic/${PACKAGE_NAME}"
    commit ${MESSAGE}
fi
