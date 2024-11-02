module.exports = {
  presets: ['module:metro-react-native-babel-preset'],
  plugins: [
    'react-native-reanimated/plugin', // Để lại nếu đang sử dụng react-native-reanimated
    [
      '@babel/plugin-transform-class-properties',
      { loose: true }, // hoặc { loose: false } nhưng phải đồng nhất
    ],
    [
      '@babel/plugin-transform-private-methods',
      { loose: true }, // hoặc { loose: false } nhưng phải đồng nhất
    ],
    [
      '@babel/plugin-transform-private-property-in-object',
      { loose: true }, // hoặc { loose: false } nhưng phải đồng nhất
    ],
  ],
};
