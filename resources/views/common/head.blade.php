<el-menu
    :default-active="default_active"
    class="el-menu-demo"
    mode="horizontal"
    @select="handleSelect"
    background-color="#409EFF"
    text-color="#fff"
    active-text-color="#ffd04b">
    <el-menu-item index="/question/show" href="/question/list">历史会话</el-menu-item>
    <el-menu-item index="/chat/show">ChatGPT</el-menu-item>
    <el-menu-item index="/user/show">个人中心</el-menu-item>
    <el-menu-item index="/invite/show">邀请奖励</el-menu-item>
    <el-menu-item index="/userFeedback/show">反馈问题</el-menu-item>
    {{--<el-submenu index="2">
        <template slot="title">我的工作台</template>
        <el-menu-item index="2-1">选项1</el-menu-item>
        <el-menu-item index="2-2">选项2</el-menu-item>
        <el-menu-item index="2-3">选项3</el-menu-item>
        <el-submenu index="2-4">
            <template slot="title">选项4</template>
            <el-menu-item index="2-4-1">选项1</el-menu-item>
            <el-menu-item index="2-4-2">选项2</el-menu-item>
            <el-menu-item index="2-4-3">选项3</el-menu-item>
        </el-submenu>
    </el-submenu>
    <el-menu-item index="3" disabled>消息中心</el-menu-item>
    <el-menu-item index="4"><a href="https://www.ele.me" target="_blank">订单管理</a></el-menu-item>--}}
</el-menu>

{{--<el-menu
    :default-active="activeIndex2"
    class="el-menu-demo"
    mode="horizontal"
--}}{{--    @select="handleSelect"--}}{{--
    background-color="#545c64"
    text-color="#fff"
    active-text-color="#ffd04b"
    :router=true
>
    <el-menu-item index="/question/show">历史会话</el-menu-item>
    <el-menu-item index="/chat/show">ChatGpt</el-menu-item>
--}}{{--    <el-menu-item index="1">个人中心</el-menu-item>--}}{{--
--}}{{--    <el-menu-item index="1">反馈问题</el-menu-item>--}}{{--
--}}{{--    <el-menu-item index="1">邀请奖励</el-menu-item>--}}{{--
</el-menu>--}}
