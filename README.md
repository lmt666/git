# 项目

购物网站

----------

# 代码

[https://github.com/lmt666/git/tree/master/www](https://github.com/lmt666/git/tree/master/www)

----------

# 功能

- 注册（验证码功能）和登陆。
- 商品的增删改查，图片上传。
- 评论功能。
- 分页功能。
- 用户可选择商品加入购物车，加入后减去相应的商品数量；购物车中可以删除已选商品，删除后加上相应的商品数量。
- 购物车有结算功能，结算时可选择收货地址，提交后减去相应的余额，购物车清空，生成订单。
- 管理员可进入后台查看到每一个用户的订单，订单初始状态均为“未发货”。
- 管理员有发货功能，用户有收货功能。当用户确认收货后，订单清空，生成历史订单，用户可在历史订单中查看所有购买记录，可选择删除某条记录。管理员也可查看所有用户的所有订单记录，可选择删除某条记录，两者互不影响（用户或管理员删除记录均不影响对方查看）。

----------

# 技术

### 前端 ###

bootstrap、js、css

### 后端 ###

PDO、composer自动加载