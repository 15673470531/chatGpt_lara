<el-container>
    {{--        <el-header>我是头部</el-header>--}}
    <el-main>
        <el-row class="question-container" type="flex" justify="center">
            <el-col :span="10">
                <el-row v-for="(item,index) in data" class="question-item" :gutter="0">
                    <el-col :span="24">
                        <div class="grid-content bg-purple">
                            <el-card shadow="hover">
                                <div slot="header"
                                     class="question-title-container">@{{ item.title }} 我是chat
                                </div>
                                <div class="question-content-container">@{{item.content}}</div>
                            </el-card>
                        </div>
                    </el-col>
                </el-row>
                <el-pagination
                    background
                    layout="prev, pager, next"
                    :total="1000" style="text-align: center">
                </el-pagination>
            </el-col>
        </el-row>
    </el-main>
    <el-footer>我是尾部</el-footer>
</el-container>
