#!/bin/bash
set -e
source "../.env"
DOMAIN=$(echo "$DOMAIN")
# sudo chown -R $(whoami) /usr/local/Frameworks /usr/local/bin /usr/local/etc /usr/local/etc/bash_completion.d /usr/local/include /usr/local/lib /usr/local/lib/pkgconfig /usr/local/lib/python3.7/site-packages /usr/local/opt /usr/local/sbin /usr/local/share /usr/local/share/aclocal /usr/local/share/doc /usr/local/share/info /usr/local/share/locale /usr/local/share/man /usr/local/share/man/man1 /usr/local/share/man/man3 /usr/local/share/man/man5 /usr/local/share/man/man7 /usr/local/share/man/man8 /usr/local/var/log
# chmod u+w /usr/local/Frameworks /usr/local/bin /usr/local/etc /usr/local/etc/bash_completion.d /usr/local/include /usr/local/lib /usr/local/lib/pkgconfig /usr/local/lib/python3.7/site-packages /usr/local/opt /usr/local/sbin /usr/local/share /usr/local/share/aclocal /usr/local/share/doc /usr/local/share/info /usr/local/share/locale /usr/local/share/man /usr/local/share/man/man1 /usr/local/share/man/man3 /usr/local/share/man/man5 /usr/local/share/man/man7 /usr/local/share/man/man8 /usr/local/var/log
# sudo chown -R $(whoami) /usr/local/var/homebrew
brew install mkcert
mkcert -install "${DOMAIN}"
mkdir -p ../certs
find . -type f -name "*.pem" -exec mv {} ../certs \;