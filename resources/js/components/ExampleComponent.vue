<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hot Module Replacement 示例</div>

                    <div class="card-body">
                        <p>修改 resources/js/demo-hmr.js 会触发页面完全刷新。</p>
                        <p>修改 resource/js/components/ExampleComponent.vue 以及 resource/scss/demo-hmr.scss 则会触发模块热替换</p>
                        <p>修改后端及 blade 模板文件不会触发</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  data () {
    return {
      msg: ''
    }
  },

  mounted () {
    console.log('Component mounted.')
  },
}
</script>

<style scoped lang="scss">

</style>
