### 实用的Vue组件

# 安装
    //安装Laravel ui
    composer require laravel/ui --dev
    //生成脚手架
    php artisan ui vue
    //安装前端包
    npm install --no-bin-links  或者  yarn install --no-bin-links

# 功能介绍

1、上下滑动Vue组件完成 scroll-link

2、context-menu
    
    //安装tailwindcss
    npm install tailwindcss
    //将resources/sass/app.scss中内容删除，并添加
    @tailwind base;
    
    @tailwind components;
    
    @tailwind utilities;
    //修改根目录下webpack.mix.js
        //引入tailwindcss
        const tailwindcss = require('tailwindcss')
        mix.js('resources/js/app.js', 'public/js')
           .sass('resources/sass/app.scss', 'public/css')
            .options({
                processCssUrls: false,
                postCss: [ tailwindcss() ],
            })
            
