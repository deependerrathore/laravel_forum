<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <el-container>
            <el-header>
                    <el-menu :default-active="activeIndex" class="el-menu-demo" mode="horizontal" @select="handleSelect">
                            <el-menu-item index="1">Processing Center</el-menu-item>
                            <el-submenu index="2">
                              <template slot="title">Workspace</template>
                              <el-menu-item index="2-1">item one</el-menu-item>
                              <el-menu-item index="2-2">item two</el-menu-item>
                              <el-menu-item index="2-3">item three</el-menu-item>
                              <el-submenu index="2-4">
                                <template slot="title">item four</template>
                                <el-menu-item index="2-4-1">item one</el-menu-item>
                                <el-menu-item index="2-4-2">item two</el-menu-item>
                                <el-menu-item index="2-4-3">item three</el-menu-item>
                              </el-submenu>
                            </el-submenu>
                            <el-menu-item index="3" disabled>Info</el-menu-item>
                            <el-menu-item index="4"><a href="https://www.ele.me" target="_blank">Orders</a></el-menu-item>
                          </el-menu>
            </el-header>
            <el-main>            
                @yield('content')
            </el-main>
        </el-container>
    </div>
</body>
</html>

<script>
        export default {
          data() {
            return {
              activeIndex: '1',
            };
          },
          methods: {
            handleSelect(key, keyPath) {
              console.log(key, keyPath);
            }
          }
        }
      </script>