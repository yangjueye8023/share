
### 安装指南

方式一 git部署
方式二 lean deploy上传
[https://leancloud.cn/docs/leanengine_quickstart.html#部署到云端](https://leancloud.cn/docs/leanengine_quickstart.html#部署到云端)

### 说明

- 在项目的/application/config/hooks.php文件中，换成自己的appid与appsecret

- 在项目的/application/third_party/wxpay/WxPay.Config.php文件中，换成自己的微信key信息

- 如果报密码错误，在_User表中，找到lendoo这个用户，将password明文录入，即可改成自己想要的密码

- 支付回调，改成自己申请到的二级域名，Line27处，`$input->SetNotify_url("https://laeser.leanapp.cn/WXPay/notify");`


### 技术栈

Codeigniter

LeanCloud

Bootstrap

Admin-LTE

jQuery

fex-webuploader

element-ui/vue

jueye
