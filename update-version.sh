#!/usr/bin/env bash
set -euo pipefail

CONFIG_FILE="docs/_config.yml"

if [[ $# -ne 2 ]]; then
  echo "Usage: $0 <version> <date>"
  exit 1
fi

version="$1"
lib_version="${version%-*}"
release_date="$2"

sed -i \
  -e "s|  lib_version: \"[^\"]*\"|  lib_version: \"${lib_version}\"|" \
  -e "s|  version: \"[^\"]*\"|  version: \"${version}\"|" \
  -e "s|  release_date: \"[^\"]*\"|  release_date: \"${release_date}\"|" \
  "$CONFIG_FILE"

echo "Updated ${CONFIG_FILE}."
