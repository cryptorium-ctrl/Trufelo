const FileManagerPlugin = require('filemanager-webpack-plugin');

module.exports = {

        plugins: [
    new FileManagerPlugin({
        onEnd: {
            move: [
                { source: '/path/from', destination: '/path/to' },
                { source: '/path/fromfile.txt', destination: '/path/tofile.txt' }
            ],
        }
    })
],

}
