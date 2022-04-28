const path = require('path');

module.exports = {
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
        },

        fallback:{
                "fs": false,
                "os":false, 
                "stream":false,
                "http":false,
                "https":false,
                "zlib":false,
                "vm":false,
                "crypto":false,
                "react":false,
                "path":false,
                "module":false,
                "uglify-js":false,
                "constants":false,
                "child_process":false,
                "worker_threads":false,
                "@pmmmwh/react-refresh-webpack-plugin":false,
                "net":false,
                "esbuild":false,
                "@swc/core":false,
                "readline":false,
                "browser-sync-webpack-plugin":false,
                "esbuild/package.json":false,
                "@swc/core/package.json":false,
                "fsevents":false,
                "inspector":false,
                "ts-node":false,

        }
    },
    

};


