import React from 'react';
import { Text, View, ScrollView, Image, TouchableOpacity, SafeAreaView, StatusBar, useColorScheme, TextInput } from 'react-native';
import { useNavigation } from '@react-navigation/native';
import commonStyles from './commonStyles';

const TrangChu = () => {
  const isDarkMode = useColorScheme() === 'dark';
  const navigation = useNavigation();

  const backgroundStyle = {
    backgroundColor: isDarkMode ? '#333' : '#f5f5f5',
  };

  return (
    <SafeAreaView style={[commonStyles.container, backgroundStyle]}>
      <StatusBar barStyle={isDarkMode ? 'light-content' : 'dark-content'} />
      <ScrollView style={commonStyles.scrollContainer}>
   

        {/* Thanh điều hướng */}
        <View style={commonStyles.navbar}>
          <Text style={commonStyles.navText}>Trang chủ</Text>
          <TouchableOpacity onPress={() => navigation.navigate('Category')}>
            <Text style={commonStyles.navText}>NextPage</Text>
          </TouchableOpacity>
        </View>
     {/* Khu vực tìm kiếm */}
     <View style={commonStyles.searchContainer}>
          <TextInput
            style={commonStyles.searchInput}
            placeholder="Search..."
            placeholderTextColor={isDarkMode ? '#aaa' : '#666'}
          />
          <TouchableOpacity style={commonStyles.searchButton}>
            <Text style={commonStyles.searchButtonText}>Search</Text>
          </TouchableOpacity>
        </View>
        {/* Khu vực bài viết chính */}
        <View style={commonStyles.mainArticleContainer}>
          <View style={commonStyles.mainArticle}>
            <Image style={commonStyles.mainImage} source={{ uri: 'https://via.placeholder.com/300x200' }} />
            <Text style={commonStyles.mainTitle}>Bài viết chính</Text>
            <Text style={commonStyles.mainSummary}>Tóm tắt nội dung của bài viết chính...</Text>
          </View>
        </View>

        {/* Danh sách bài viết phía dưới */}
        <View style={commonStyles.articleListContainer}>
          {[1, 2, 3, 4].map((item) => (
            <TouchableOpacity key={item} style={commonStyles.articleItem}>
              <Image style={commonStyles.articleImage} source={{ uri: 'https://via.placeholder.com/150' }} />
              <Text style={commonStyles.articleTitle}>Bài viết {item}</Text>
            </TouchableOpacity>
          ))}
        </View>

        {/* Danh mục và bài viết trong danh mục */}
        <View style={commonStyles.categoryContainer}>
          <View style={commonStyles.categoryList}>
            {[1, 2, 3].map((category) => (
              <TouchableOpacity key={category} style={commonStyles.categoryItem}>
                <Text style={commonStyles.categoryText}>Danh mục {category}</Text>
              </TouchableOpacity>
            ))}
          </View>
          <View style={commonStyles.categoryArticles}>
            {[1, 2].map((item) => (
              <TouchableOpacity key={item} style={commonStyles.categoryArticleItem}>
                <Image style={commonStyles.categoryArticleImage} source={{ uri: 'https://via.placeholder.com/150' }} />
                <Text style={commonStyles.categoryArticleTitle}>Bài viết {item} trong danh mục</Text>
              </TouchableOpacity>
            ))}
          </View>
        </View>
      </ScrollView>
    </SafeAreaView>
  );
};

export default TrangChu;
