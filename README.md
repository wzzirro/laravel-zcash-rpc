# Zcash JSON-RPC Service Provider for Laravel

## Install

```
$ composer require wzzirro/laravel-zcash-rpc
```
## Settings

```
ZCASHD_HOST=127.0.0.1
ZCASHD_PORT=8232
ZCASHD_USER=rpc_user
ZCASHD_PASSWORD=rpc_password
```
## Using

```
<?php

Route::get('/', function () {
    return response()->json(zcashd()->getinfo()->get());
});
```
Responce:
```
{
  "version": 1010250,
  "protocolversion": 170006,
  "walletversion": 60000,
  "balance": 12.44500001,
  "blocks": 358561,
  "timeoffset": 0,
  "connections": 8,
  "proxy": "",
  "difficulty": 10496786.60417338,
  "testnet": false,
  "keypoololdest": 1530986182,
  "keypoolsize": 101,
  "paytxfee": 0,
  "relayfee": 0.000001,
  "errors": ""
}
```