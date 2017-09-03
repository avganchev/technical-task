FROM composer
EXPOSE 5000

ADD . /opt/zoo
WORKDIR /opt/zoo

RUN ["composer", "install"]

CMD ["php", "-S", "0.0.0.0:5000", "public/index.php"]