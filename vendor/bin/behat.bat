@echo off
pushd .
cd %~dp0
cd "../behat/behat/bin"
set BIN_TARGET=%CD%\behat
popd
php "%BIN_TARGET%" %*
