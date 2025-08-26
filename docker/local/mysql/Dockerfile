# https://hub.docker.com/_/mysql
FROM mysql:9.4

# タイムゾーンを設定（日本）
ENV TZ=Asia/Tokyo

COPY docker/local/mysql/etc-mysql.cnf /etc/mysql/conf.d/etc-mysql.cnf

EXPOSE 3306
