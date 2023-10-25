FROM ubuntu:latest
LABEL authors="joly"

ENTRYPOINT ["top", "-b"]
