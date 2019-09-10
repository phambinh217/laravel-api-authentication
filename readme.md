# Giới thiệu
Là dự án laravel kết hợp với laravel passport để xây dựng các api cơ bản liên quan tới việc xác thực tài khoản như đăng ký, đăng nhập, đăng xuất, lấy thông tin của user đang đăng nhập.

Repo này cũng là kết quả của [phần 1](#https://phambinh.net/bai-viet/setup-mot-du-an-vuejs-ket-hop-voi-laravel-phan-1) trong loạt bài viết về "Setup một dự án VueJs kết hợp với Laravel" trên phambinh.net.

# Cài đặt
Clone repo

`
git clone https://github.com/phambinh217/laravel-api-authentication.git
`

Cấu hình thông tin kết nối tới database trong .env

```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=laravel_blog
DB_USERNAME=root
DB_PASSWORD=root
```

Chạy migrate

`
php artisan migrate
`
