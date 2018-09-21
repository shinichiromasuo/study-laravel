# study-laravel
Laravel学習用のプロジェクトです。

Forkして使ってください。

## 開発環境の構築
### 1. プロジェクトのFork
GitHubからこのプロジェクトをForkしてください。

### 2. ソースコードの取得
1でForkしたプロジェクトのソースコードを取得します。
```
$ cd ~/your/workspace
$ git clone git@github.com:your-github-account/study-laravel.git
```

### 3. Laradockのダウンロード
```
$ cd ~/your/workspace/study-laravel
$ git submodule init
$ git submodule update
```

### 4. Laradockの.envのコピー
```
$ cd ~/your/workspace/study-laravel
$ ./scripts/setup.sh
```

### 5. Dockerの起動
```
$ cd ~/your/workspace/study-laravel/laradock-study_laravel
$ docker-compose up -d nginx mysql
```

### 6. PHPパッケージのインストール
```
$ cd ~/your/workspace/study-laravel/laradock-study_laravel
$ docker-compose exec workspace bash
# composer install
```

### 7. Laravelの.envのコピー
```
$ cd ~/your/workspace/study-laravel/laradock-study_laravel
$ docker-compose exec workspace bash
# cp .env.example .env
```

### 8. アプリケーションキーの設定
```
$ cd ~/your/workspace/study-laravel/laradock-study_laravel
$ docker-compose exec workspace bash
# php artisan key:generate
```

### 9. データベース情報の設定
7でコピーした`.env`を編集しデータベース情報を設定してください。

変更前：
```
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```
変更後：
```
DB_DATABASE=study_laravel
DB_USERNAME=study_laravel
DB_PASSWORD=study_laravel
```

## 使用方法
### WEBサイトへのアクセス
http://localhost/

### 作業環境へのアクセス
コマンドの実行（Composer、Artisan、PHPUnit等）はworkspaceコンテナの中で行ってください。
```
$ docker-compose exec workspace bash
```

### DBへのアクセス
```
$ docker-compose exec mysql mysql -u study_laravel -pstudy_laravel study_laravel
```
