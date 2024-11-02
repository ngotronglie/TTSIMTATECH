import React from 'react';
import { Text, View, ScrollView, Image, TouchableOpacity, SafeAreaView, StatusBar, useColorScheme, TextInput } from 'react-native';
import commonStyles from './commonStyles';

const Category = () => {
  const isDarkMode = useColorScheme() === 'dark';

  const backgroundStyle = {
    backgroundColor: isDarkMode ? '#f5f5f5' : '#fff',
  };

  return (
    <SafeAreaView style={[commonStyles.container, backgroundStyle]}>
      <StatusBar barStyle={isDarkMode ? 'light-content' : 'dark-content'} />
      <ScrollView style={commonStyles.scrollContainer}>
        {/* Header */}
        <View style={commonStyles.headerContainer}>
          <Text style={commonStyles.headerTitle}>Category</Text>
          <View style={commonStyles.searchContainer}>
            <TextInput style={commonStyles.searchInput} placeholder="Search..." />
          </View>
        </View>

        {/* Thanh điều hướng */}
        <View style={commonStyles.navbar}>
          <TouchableOpacity style={commonStyles.navButton}><Text style={commonStyles.navText}>Home</Text></TouchableOpacity>
          <TouchableOpacity style={commonStyles.navButton}><Text style={commonStyles.navText}>Category</Text></TouchableOpacity>
          <TouchableOpacity style={commonStyles.navButton}><Text style={commonStyles.navText}>News</Text></TouchableOpacity>
          <TouchableOpacity style={commonStyles.navButton}><Text style={commonStyles.navText}>Contact</Text></TouchableOpacity>
        </View>

        {/* Danh sách bài viết trong danh mục */}
        <View style={commonStyles.articleListContainer}>
          {[1, 2, 3, 4, 5, 6, 7, 8, 9].map((item) => (
            <TouchableOpacity key={item} style={commonStyles.articleItem}>
              <Image style={commonStyles.articleImage} source={{ uri: 'https://via.placeholder.com/150' }} />
              <Text style={commonStyles.articleTitle}>Article {item}</Text>
              <Text style={commonStyles.articleSummary}>Author - A brief summary of the article content goes here...</Text>
              <TouchableOpacity style={commonStyles.readMoreButton}>
                <Text style={commonStyles.readMoreText}>Read More</Text>
              </TouchableOpacity>
            </TouchableOpacity>
          ))}
        </View>

        {/* Phân trang */}
        <View style={commonStyles.paginationContainer}>
          {[1, 2, 3, 4, 5].map((page) => (
            <TouchableOpacity key={page} style={commonStyles.pageButton}>
              <Text style={commonStyles.pageButtonText}>{page}</Text>
            </TouchableOpacity>
          ))}
        </View>
      </ScrollView>
    </SafeAreaView>
  );
};

export default Category;
