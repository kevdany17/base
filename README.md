## Sigi Base Laravel

This a base repository for new proyects of "Not-Impulzo":

- The branch *release/2.0.0* is a **main** branch.

## Versións

* PHP versión is **8.1**
* Node versión is **18.17.1**
* React versión is **17.0.2**
* Laravel versión is **8.0**

# Installation

* clone repository with ssh
* execute: *composer install*
* execute: *npm install*
* execute: *make husky-init*
* execute: *make husky-chmod*
* execute: *make db-reset*

Require install make:

* Ubuntu: sudo apt-get install make
* Windows: Install MinGW Package Manager (Included on GitBash)

  1. Install Chocolatey

  > ``@"%SystemRoot%\System32\WindowsPowerShell\v1.0\powershell.exe" -NoProfile -InputFormat None -ExecutionPolicy Bypass -Command "[System.Net.ServicePointManager]::SecurityProtocol = 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://community.chocolatey.org/install.ps1'))" && SET "PATH=%PATH%;%ALLUSERSPROFILE%\chocolatey\bin"``
  >

  2. Install make from git bash

  > ``choco install make``
  >

## Architecture MVC (n-tier)

![1711685418029](image/README/1711685418029.png)
