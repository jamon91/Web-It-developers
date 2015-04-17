#!/bin/bash
# export SSH_KEY=`cat $HOME/.ssh/id_dsa.pub`

if [ ! -e $PWD/INTERNO1 ]; then
# Solo 1 vez
VBoxManage createvm  --name INTERNO1 --basefolder $PWD --register
VBoxManage storagectl INTERNO1 --name INTERNO1-storage  --add sata
VBoxManage storageattach INTERNO1 --storagectl INTERNO1-storage --port 0 --device 0 --type hdd --medium $PWD/base.vdi --mtype multiattach
VBoxManage storageattach INTERNO1 --storagectl INTERNO1-storage --port 1 --device 0 --type hdd --medium $PWD/swap.vdi --mtype immutable
VBoxManage modifyvm INTERNO1 --memory 256
VBoxManage modifyvm INTERNO1 --nic1 intnet --intnet1 vlan1 --macaddress1 080027111111  
VBoxManage guestproperty set INTERNO1 /ssi/num_interfaces 1
VBoxManage guestproperty set INTERNO1 /ssi/eth0/type static
VBoxManage guestproperty set INTERNO1 /ssi/eth0/address 192.168.100.11
VBoxManage guestproperty set INTERNO1 /ssi/eth0/netmask 24
VBoxManage guestproperty set INTERNO1 /ssi/default_gateway 192.168.100.1
fi


VBoxManage startvm INTERNO1
