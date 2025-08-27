# library

[![LICENSE](https://img.shields.io/badge/license-MIT-green.svg)](./LICENSE)
![releases](https://img.shields.io/github/release/q23isline/library.svg?logo=github)
[![GitHub Actions](https://github.com/q23isline/library/actions/workflows/ci.yml/badge.svg)](https://github.com/q23isline/library/actions/workflows/ci.yml)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%208-brightgreen.svg?style=flat-square)](https://github.com/phpstan/phpstan)
[![Open in Visual Studio Code](https://img.shields.io/static/v1?logo=visualstudiocode&label=&message=Open%20in%20Visual%20Studio%20Code&labelColor=555555&color=007acc&logoColor=007acc)](https://github.dev/q23isline/library)

[![PHP](https://img.shields.io/static/v1?logo=php&label=PHP&message=v8.4.11&labelColor=555555&color=777BB4&logoColor=777BB4)](https://www.php.net)
[![CakePHP](https://img.shields.io/static/v1?logo=cakephp&label=CakePHP&message=v5.2.6&labelColor=555555&color=D33C43&logoColor=D33C43)](https://cakephp.org)
[![MySQL](https://img.shields.io/static/v1?logo=mysql&label=MySQL&message=v9.4&labelColor=555555&color=4479A1&logoColor=4479A1)](https://dev.mysql.com)

図書予約システム

- [アプリ開発ガイドライン](./app/README.md)

## 前提

- インストール
  - [Windows Subsystem for Linux](https://learn.microsoft.com/ja-jp/windows/wsl/)
  - [Git](https://git-scm.com/)
  - [Docker Desktop](https://www.docker.com/ja-jp/products/docker-desktop/)
  - [Visual Studio Code](https://code.visualstudio.com/)

## はじめにやること

1. Windows Subsystem for Linux 上でプログラムダウンロード

    ```bash
    git clone https://github.com/q23isline/library.git
    ```

2. リポジトリのカレントディレクトリへ移動

    ```bash
    cd library
    ```

3. 開発準備

    ```bash
    cp .vscode/extensions.json.default .vscode/extensions.json
    cp .vscode/launch.json.default .vscode/launch.json
    cp .vscode/settings.json.default .vscode/settings.json
    cp app/config/.env.example app/config/.env
    cp app/config/app_local.example.php app/config/app_local.php
    ```

4. アプリ立ち上げ

    ```bash
    docker compose build
    sudo chmod -R ugo+rw ./
    docker compose up -d
    docker compose exec app php composer.phar install
    sudo chmod -R 777 app/vendor
    ```

## 日常的にやること

### システム起動

```bash
# DB、バックエンドコンテナ起動
docker compose up -d
# バックエンド起動
docker compose exec app bin/cake server -H 0.0.0.0
```

### システム終了

```bash
# バックエンド起動ターミナルで Ctrl + c

docker compose down
```

## 動作確認

### URL

#### バックエンド

<http://localhost:8765/login>

#### ログイン情報

| Email               | Password |
| ------------------- | -------- |
| <admin@example.com> | admin00  |

## Permission Deniedエラーが出た時の解決方法

```bash
# プロジェクト全体のファイルすべてに読み込み、書き込み権限を与える
sudo chmod -R ugo+rw ./
# インストールしたライブラリに実行権限を含めた全権限を与える
sudo chmod -R 777 app/vendor
```

## データベースへの接続

| 項目名     | 設定値    |
| ---------- | --------- |
| ホスト名   | 127.0.0.1 |
| ポート     | 3306      |
| ユーザー名 | root      |
| パスワード | root      |

## ログ出力場所

| サービス | ログ出力場所 |
| -------- | ------------ |
| MySQL    | logs/db      |
