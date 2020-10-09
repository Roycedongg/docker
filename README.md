### 安装：

1. 将docker文件夹复制到$HOME下

2. cd $HOME/docker

3. docker-compose up -d

4. 查看容器是否启动 docker ps

5. 项目目录挂在到容器中，注意给缓存目录777权限

### 目录结构

```
nginx1.15 # nginx容器
    - etc
        nginx.conf # nginx配置文件
    - vhost
        default.conf # 默认虚拟主机配置
        test.conf    # 自定义虚拟主机配置
    - dockerfile # nginx镜像
php74_1 # php容器
    - etc
        php.ini # php配置文件
    - lib
        redis-5.2.0.tgz # php-redis扩展包
    - dockerfile # php镜像
php74_2 # php容器
    - etc
        php.ini # php配置文件
php74_3 # php容器
    - etc
        php.ini # php配置文件            
redis5_node1 # redis容器
    - etc
        redis.conf # redis配置文件
    - data # 持久化数据目录
    - dockerfile # redis镜像
redis5_node2 # redis容器
    - etc
        redis.conf # redis配置文件
    - data # 持久化数据目录
redis5_node3 # redis容器
    - etc
        redis.conf # redis配置文件
    - data # 持久化数据目录
redis5_node4 # redis容器
    - etc
        redis.conf # redis配置文件
    - data # 持久化数据目录
redis5_node5 # redis容器
    - etc
        redis.conf # redis配置文件
    - data # 持久化数据目录
redis5_node6 # redis容器
    - etc
        redis.conf # redis配置文件
    - data # 持久化数据目录
www # 项目目录
    - test # 测试项目
docker-compose.yml # 容器编排文件
README.md # 说明文件    

```

### 手动配置redis集群

```

# 进入任意容器
docker exec -it redis5_node1 sh

# 执行命令
redis-cli --cluster create 172.22.22.100:6379 172.22.22.101:6379 172.22.22.102:6379 172.22.22.103:6379 172.22.22.104:6379 172.22.22.105:6379 --cluster-replicas 1


```

### 访问测试
http://127.0.0.1




**提示：**

#### nginx将请求平均分发给： http://127.0.0.1:81 http://127.0.0.1:82 http://127.0.0.1:83 

#### redis集群数据节点： ['127.0.0.1:6379', '127.0.0.1:6380', '127.0.0.1:6381', '127.0.0.1:6382', '127.0.0.1:6383', '127.0.0.1:6384', '127.0.0.1:6385']  
