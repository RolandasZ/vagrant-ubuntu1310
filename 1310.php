13.10 Ubuntu

atsidarom terminala 

ctrl+alt+t
vedam

cd ~/Desktop

// Git'o diegimas
sudo apt-get update
sudo apt-get install git git-core

// virtualbox, vagrant. 
sudo apt-get install virtualbox

// parsisiunciam vagranta Desktope
http://www.vagrantup.com/
sudo chmod +x vagrant[tab] // exec
sudo dpkg -i vagrant[tab] //  [tab] = autocomplete

// vagranto versijos tikrinimas
vagrant -v
//turi rasyt 1.5.1

// klonuojam

git clone https://github.com/nfqakademija/vm.git
cd vm

// nukopijuoti wheezy.box i vm folderi.
vagrant box add nfqakademija/wheezy wheezy.box

vagrant up

* It appears your machine doesn't support NFS, or there is not an
adapter to enable NFS on this machine for Vagrant. Please verify
that `nfsd` is installed on your machine, and try again. If you're
on Windows, NFS isn't supported. If the problem persists, please
contact Vagrant support.

// jei ismete sita error. terminale vesti.
vagrant halt

sudo apt-get installe nfs-kernel-server
vagrant plugin install vagrant-hostmanager
vagrant plugin install vagrant-box-updater
vagrant plugin install vagrant-hostsupdater

//bandom dar karta

vagrant up

// pazaliuos, paraudonuos ir galiausiai

==> default: Checking for host entries
==> default: adding to (/etc/hosts) : 192.168.63.29  projektas.dev  # VAGRANT: 40053c90115e675dc370b811eff71aca (default) / c09d612f-d144-49e6-bc0f-e7da3b7d2685

boom. projektas.dev veikia.

// nepamirsti kaskart isjungiant

vagrant halt

// priesingu atveju neisjungsit kompiuterio.
