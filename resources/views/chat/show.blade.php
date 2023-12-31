<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- import CSS -->
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
</head>
<body>
<style>
    body ,html{
        height: 100%;
        margin: 0px;
    }

    .question-item {
        margin: 15px 0px;
    }

    .question-title-container {
        font-weight: bold;
    }
    .chatGptContainer{
        height: calc(100% - 50px);
    }
    .chat-session{
        isplay: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #202123;
        font-family: Helvetica,sans-serif;
        overflow-y: hidden;
    }
    .chat-container{
        height: 100%;
        flex-flow: column wrap;
        width: 100%;
        max-width: 900px;
        margin: 25px auto;
        height: calc(100% - 50px);
        border: var(--border);
        border-radius: 5px;
        background: var(--msger-bg);
        box-shadow: 0 15px 15px -5px rgba(0,0,0,.2);
    }
    .chat-input-container{
        display: flex;
        padding: 10px;
        border-top: var(--border);
        background: #2b2c34;
        font-size: 13px;

        position: relative;
        top: calc(95% - 63px);
    }
    .chat-input-container *{
        padding: 10px;
        border: none;
        border-radius: 3px;
        font-size: 16px;
    }
    .chat-input{
        flex: 1;
        background: #444654;
        color: #d9d9d9;
        padding: 0px;
        margin: 0px;
    }
    .chat-input textarea{
        min-height: 44px;
        height: 44px;

        display: block;
        resize: vertical;
        /*padding: 5px 15px;*/
        line-height: 1.5;
        box-sizing: border-box;
        width: 100%;
        font-size: inherit;
        color: #606266;
        background-color: #fff;
        background-image: none;
        border: 1px solid #dcdfe6;
        border-radius: 4px;
        transition: border-color .2s cubic-bezier(.645,.045,.355,1);
    }
    .chat-btn{
        margin-left: 10px;
        background: #69707a;
        color: #fff;
        font-weight: 700;
        cursor: pointer;
    }
</style>
<div id="app" style="height: 100%">
    @include('common.head')


    <div class="chat-session">


        <el-row :gutter="0" class="chat-container" style="background: blue">
            <div>是对减肥路上的减肥了</div>
            <el-col :offset="0" :xs="20" :sm="20" :md="12" :lg="24" :xl="12" style="height: calc(100% - 60px)">
                <div class="grid-content bg-purple">233</div>
                <form class="chat-input-container">
                    <div class="grid-content bg-purple chat-input">
                        <textarea autocomplete="off" placeholder="请输入消息内容" require></textarea>
                    </div>
                    <button class="chat-btn">发送</button>
                </form>
            </el-col>
        </el-row>
    </div>


{{--
    <el-form :model="dynamicValidateForm" ref="dynamicValidateForm" label-width="100px" class="demo-dynamic">
        <el-form-item
            v-for="(domain, index) in dynamicValidateForm.domains"
            :label="'域名' + index"
            :key="domain.key"
            :prop="'domains.' + index + '.value'"
            :rules="{
      required: true, message: '域名不能为空', trigger: 'blur'}"
        >
            <el-input v-model="domain.value"></el-input>
            <el-button @click.prevent="removeDomain(domain)">删除</el-button>
        </el-form-item>
    </el-form>
--}}

</div>
</body>
<!-- import Vue before Element -->
<script src="https://unpkg.com/vue@2/dist/vue.js"></script>
<!-- import JavaScript -->
<script src="https://unpkg.com/element-ui/lib/index.js"></script>
<script>
    new Vue({
        el: '#app',
        data: function () {
            return {
                visible: false,
                default_active: '/chat/show',
                dynamicValidateForm: {
                    domains: [{
                        value: ''
                    }],
                    email: ''
                }
            }
        },
        methods: {
            handleSelect(url, path) {
                window.location.href = url;
                // fetch('/navMenuDispatch/' + key).then(response => response.json()).then(data => {
                //     console.log(data)
                // });
                console.log(url, path)
            }
        }
    })
</script>
</html>
