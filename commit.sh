#!/bin/sh

MESSAGE="${1}"

commit "${MESSAGE}"

cd "/mnt/safe/laradic/workspace/Laradic"

for D in *; do
    if [ -d "${D}" ]; then
        dir="/mnt/safe/laradic/workspace/Laradic/${D}"
        echo "${dir}"

        cd "${dir}"
        commit "${MESSAGE}"
        cd "/mnt/safe/laradic/workspace/Laradic/"

    fi
done
