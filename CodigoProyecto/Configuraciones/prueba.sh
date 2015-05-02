#!/usr/bin/env bash
OLD_HOSTNAME="$( hostname )"
export NEW_HOSTNAME = prueba1
hostname"$NEW_HOSTNAME"
sed -i "s/HOSTNAME=.*/HOSTNAME=$NEW_HOSTNAME/g" /etc/hostname
sed -i " s/$OLD_HOSTNAME/$NEW_HOSTNAME/g" /etc/hosts
