#!/bin/bash

MYDIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )
source "${MYDIR}/build/tools/_main.sh"

test() {
    local group=$1
    Echo "$(f bold)$(fc green)Testing $(fc orange)${group}$(f off)"
    phpunit -c phpunit.xml --colors --group "$group"
}

if [ -n "$1" ]; then
    test $1
else
    test dev
    test themes
    test support
    test blade-extensions
    test docs
    test project
fi
