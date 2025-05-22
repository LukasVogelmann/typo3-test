export const config = {
    target: 'es6',
    outDir: '../../public/dist',
    entry: 'src/typescript/main.ts',
    watchIncludes: './src/**/**/.ts',

    stylelint: {
        include: ['./src/scss/**/*.scss'],
        exclude: [
            /node_modules/,
        ],
    },
}

export const DDEV_HMR_PORT = 5173
