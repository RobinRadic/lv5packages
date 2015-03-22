#!/bin/bash

MYDIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )
source "${MYDIR}/build/tools/_main.sh"

build() {
    local group=$1
    Echo "$(f bold)$(fc green)Building $(fc orange)${group}$(f off)"
    phing -f -c phpunit.xml --colors --group "$group"
}

if [ -n "$1" ]; then
    build $1
else
    build dev
    build themes
    build support
    build blade-extensions
    build docs
    build project
fi
