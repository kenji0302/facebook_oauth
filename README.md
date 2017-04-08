# Facebook OAuth テスト

## 環境

初回のみ
```bash
docker build -t facebook_oauth .
```
起動
```bash
docker run -e APP_ID=xxx -e APP_SECRET=xxx -v `pwd`:/var/www/html/ -p 80:80 -it facebook_oauth
```

参考ページ  
http://qiita.com/nightyknite/items/10ab1853581265ef4bd6# facebook_oauth
