import React, { useEffect, useState } from 'react';
import { View, Text, TextInput, ScrollView, TouchableOpacity, StyleSheet, Image, Button, ActivityIndicator } from 'react-native';
import axios from 'axios';

const API_URL = 'http://192.168.0.103:3000';

export default function HomeScreen({ navigation }) {
  const [advertisements, setAdvertisements] = useState([]);
  const [categories, setCategories] = useState([]);
  const [loading, setLoading] = useState(true);

  // Fetch data from API
  const fetchData = async () => {
    setLoading(true);
    try {
      const adsResponse = await axios.get(`${API_URL}/advertisements`);
      const categoriesResponse = await axios.get(`${API_URL}/categories`);
      setAdvertisements(adsResponse.data);
      setCategories(categoriesResponse.data);
    } catch (error) {
      console.error("Error fetching data:", error);
    } finally {
      setLoading(false);
    }
  };

  useEffect(() => {
    fetchData();
  }, []);

  if (loading) {
    return <ActivityIndicator size="large" color="#1976D2" style={styles.loader} />;
  }

  return (
    <ScrollView style={styles.container}>
      {/* Header */}
      <View style={styles.header}>
        <View style={styles.logoSearchContainer}>
          <Image source={{ uri: 'https://via.placeholder.com/100x40' }} style={styles.logo} />
          <View style={styles.searchContainer}>
            <TextInput style={styles.searchInput} placeholder="Search" />
            <TouchableOpacity style={styles.searchButton}>
              <Text style={styles.searchButtonText}>🔍</Text>
            </TouchableOpacity>
          </View>
        </View>
        <ScrollView horizontal showsHorizontalScrollIndicator={false} contentContainerStyle={styles.navContainer}>
          <TouchableOpacity onPress={() => navigation.navigate('Advertisements')}>
            <Text style={styles.navLink}>Quảng cáo</Text>
          </TouchableOpacity>
          <TouchableOpacity onPress={() => navigation.navigate('Categories')}>
            <Text style={styles.navLink}>Danh mục</Text>
          </TouchableOpacity>
          <TouchableOpacity onPress={() => navigation.navigate('Comments')}>
            <Text style={styles.navLink}>Bình luận</Text>
          </TouchableOpacity>
          <TouchableOpacity onPress={() => navigation.navigate('Users')}>
            <Text style={styles.navLink}>Người dùng</Text>
          </TouchableOpacity>
          <TouchableOpacity onPress={() => navigation.navigate('Roles')}>
            <Text style={styles.navLink}>Vai trò</Text>
          </TouchableOpacity>
          <TouchableOpacity onPress={() => navigation.navigate('RoleUser')}>
            <Text style={styles.navLink}>Quyền người dùng</Text>
          </TouchableOpacity>
        </ScrollView>
      </View>

      {/* Highlighted News Section */}
      <View style={styles.highlightedNews}>
        {advertisements.length > 0 && (
          <>
            <Image source={{ uri: advertisements[0].imageUrl || 'https://via.placeholder.com/350x200' }} style={styles.highlightedImage} />
            <Text style={styles.highlightedTitle}>{advertisements[0].title}</Text>
            <Button title="Xem chi tiết" onPress={() => navigation.navigate('Advertisements')} color="#1976D2" />
          </>
        )}
      </View>

      {/* Categories Section */}
      <View style={styles.categorySection}>
        <Text style={styles.sectionTitle}>Danh mục</Text>
        <View style={styles.categoryRow}>
          {categories.map((category, index) => (
            <TouchableOpacity key={index} style={styles.categoryItem} onPress={() => navigation.navigate('Categories')}>
              <Image source={{ uri: category.imageUrl || 'https://via.placeholder.com/100x100' }} style={styles.categoryImage} />
              <Text style={styles.categoryTitle}>{category.name}</Text>
            </TouchableOpacity>
          ))}
        </View>
      </View>

      {/* Footer */}
      <View style={styles.footer}>
        <View style={styles.footerSection}>
          <Text style={styles.footerHeading}>VỀ CHÚNG TÔI</Text>
          <Text style={styles.footerText}>Với nội dung đa dạng, từ các bài viết chuyên sâu về đề tài giáo dục và công nghệ...</Text>
        </View>
        <View style={styles.footerSection}>
          <Text style={styles.footerHeading}>LIÊN HỆ</Text>
          <Text style={styles.footerText}>Công ty TNHH EduNews, Hà Nội, Việt Nam</Text>
          <Text style={styles.footerText}>📞 0983274823</Text>
          <Text style={styles.footerText}>✉️ newsimta@gmail.com</Text>
        </View>
        <Text style={styles.footerCopyRight}>© 2024 Team Island</Text>
      </View>
    </ScrollView>
  );
}

const styles = StyleSheet.create({
  container: { flex: 1, backgroundColor: '#f7f7f7' },
  loader: { flex: 1, justifyContent: 'center', alignItems: 'center', marginTop: 50 },
  header: { backgroundColor: '#e0f7fa', paddingBottom: 10 },
  logoSearchContainer: { flexDirection: 'row', alignItems: 'center', justifyContent: 'space-between', padding: 10 },
  logo: { width: 100, height: 40 },
  searchContainer: { flexDirection: 'row', alignItems: 'center', borderColor: '#ccc', borderWidth: 1, borderRadius: 4, paddingHorizontal: 5 },
  searchInput: { width: 150, padding: 5 },
  searchButton: { padding: 5, backgroundColor: '#4CAF50', borderRadius: 4, marginLeft: 4 },
  searchButtonText: { color: '#fff', fontSize: 16 },
  navContainer: { flexDirection: 'row', justifyContent: 'center', paddingVertical: 5 },
  navLink: { fontSize: 16, color: '#000', marginHorizontal: 10 },
  highlightedNews: { padding: 16, backgroundColor: '#fff', alignItems: 'center', marginVertical: 10 },
  highlightedImage: { width: '100%', height: 200, marginBottom: 8 },
  highlightedTitle: { fontSize: 18, fontWeight: 'bold', textAlign: 'center', marginBottom: 8 },
  categorySection: { paddingVertical: 16, backgroundColor: '#f1f1f1' },
  sectionTitle: { fontSize: 20, fontWeight: 'bold', marginHorizontal: 16, marginBottom: 8 },
  categoryRow: { flexDirection: 'row', justifyContent: 'space-around' },
  categoryItem: { alignItems: 'center' },
  categoryImage: { width: 100, height: 100, marginBottom: 4 },
  categoryTitle: { fontSize: 14, fontWeight: 'bold' },
  footer: { padding: 16, backgroundColor: '#BBDEFB' },
  footerSection: { marginBottom: 16 },
  footerHeading: { fontSize: 16, fontWeight: 'bold', marginBottom: 8 },
  footerText: { fontSize: 14, color: '#333' },
  footerCopyRight: { textAlign: 'center', fontSize: 12, marginTop: 8, color: '#777' }
});
