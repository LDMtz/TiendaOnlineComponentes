import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {

            /* Purple*/
            'cm-purple-1': '#4B16A8',
            'cm-purple-2': '#7D6FFF',
            'cm-purple-3': '#7C76BC',
            'cm-purple-4': '#2C0758',
            'cm-purple-5': '#6B0EDD',
            'cm-purple-6': '#905DE7',
            'cm-purple-7': '#8C1AF6',
            'cm-purple-8': '#E39DFF',
            'cm-purple-9': '#B9B1FF',
            'cm-purple-10': '#CEA0FF',
            'cm-purple-11': '#4F007C',
  
            /* Gray*/
            'cm-gray-1': '#111111',
            'cm-gray-2': '#1C1B1B',
            'cm-gray-3': '#2F2F2F',
            'cm-gray-4': '#3A3A3A',
            'cm-gray-5': '#B9B9B9',
            'cm-gray-6': '#323135',
            'cm-gray-7': '#252323',
            'cm-gray-8': '#818181',
            'cm-gray-9': '#151515',
            'cm-gray-10': '#A4A1A1',
            'cm-gray-11': '#808080',
            'cm-gray-12': '#666666',
  
            /* Red*/
            'cm-red-1': '#E32424',
            'cm-red-2': '#780909',
            'cm-red-3': '#FF9090',

            /* Green*/
            'cm-green-1': '#23D74A',
            'cm-green-2': '#02410F',

            /* Blue*/
            'cm-blue-1': '#4AD4DE',
            'cm-blue-2': '#083958',
            'cm-blue-3': '#90B3FF',
            'cm-blue-4': '#1D0978',
            'cm-blue-5': '#1A37F6',
            'cm-blue-6': '#79AFFF',
            'cm-blue-7': '#31ACF9',
            'cm-blue-8': '#1812D5',

            /*Yellow*/
            'cm-yellow-1': '#774409',
            'cm-yellow-2': '#FFCE0C',
            'cm-yellow-3': '#FFB52C',
            'cm-yellow-4': '#72510B',
            'cm-yellow-5': '#FFB52C',
  
  
              },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
