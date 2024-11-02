import { StyleSheet } from 'react-native';

const commonStyles = StyleSheet.create({
  container: {
    flex: 1,
  },
  scrollContainer: {
    flex: 1,
  },
  headerContainer: {
    padding: 20,
    backgroundColor: '#f5f5f5',
  },
  headerTitle: {
    fontSize: 24,
    fontWeight: 'bold',
  },
  searchContainer: {
    marginTop: 10,
    flexDirection: 'row',
    alignItems: 'center',
    paddingHorizontal: 10,
  },
  searchInput: {
    flex: 1,
    borderWidth: 1,
    borderColor: '#ccc',
    borderRadius: 5,
    paddingHorizontal: 10,
    height: 40,
    marginRight: 10,
  },
  searchButton: {
    backgroundColor: '#007BFF',
    padding: 10,
    borderRadius: 5,
  },
  searchButtonText: {
    color: '#fff',
    fontWeight: 'bold',
  },
  navbar: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    padding: 10,
    backgroundColor: '#ddd',
  },
  navButton: {
    padding: 10,
  },
  navText: {
    fontSize: 18,
    fontWeight: 'bold',
  },
  mainArticleContainer: {
    padding: 10,
    backgroundColor: '#fff',
    marginBottom: 10,
  },
  mainArticle: {
    alignItems: 'center',
  },
  mainImage: {
    width: '100%',
    height: 200,
    marginBottom: 10,
  },
  mainTitle: {
    fontSize: 20,
    fontWeight: 'bold',
  },
  mainSummary: {
    fontSize: 14,
    color: '#666',
  },
  articleListContainer: {
    padding: 10,
    flexDirection: 'row',
    flexWrap: 'wrap',
    justifyContent: 'space-between',
  },
  articleItem: {
    width: '48%',
    backgroundColor: '#fff',
    marginBottom: 20,
    borderRadius: 10,
    padding: 10,
    shadowColor: '#000',
    shadowOffset: { width: 0, height: 2 },
    shadowOpacity: 0.25,
    shadowRadius: 3.84,
    elevation: 5,
    alignItems: 'center',
  },
  articleImage: {
    width: '100%',
    height: 100,
    borderRadius: 5,
    marginBottom: 10,
  },
  articleTitle: {
    fontSize: 16,
    fontWeight: 'bold',
  },
  articleSummary: {
    fontSize: 14,
    color: '#666',
    marginBottom: 10,
  },
  readMoreButton: {
    alignSelf: 'flex-start',
    backgroundColor: '#007BFF',
    paddingVertical: 5,
    paddingHorizontal: 10,
    borderRadius: 5,
  },
  readMoreText: {
    color: '#fff',
    fontSize: 14,
  },
  categoryContainer: {
    flexDirection: 'row',
    padding: 10,
  },
  categoryList: {
    width: '30%',
    marginRight: 10,
  },
  categoryItem: {
    backgroundColor: '#e74c3c',
    padding: 10,
    marginBottom: 10,
    borderRadius: 5,
  },
  categoryText: {
    color: '#fff',
    fontWeight: 'bold',
    textAlign: 'center',
  },
  categoryArticles: {
    width: '70%',
  },
  categoryArticleItem: {
    backgroundColor: '#fff',
    marginBottom: 10,
    borderRadius: 5,
    padding: 10,
  },
  categoryArticleImage: {
    width: '100%',
    height: 100,
    marginBottom: 5,
  },
  categoryArticleTitle: {
    fontSize: 16,
    fontWeight: 'bold',
  },
  paginationContainer: {
    flexDirection: 'row',
    justifyContent: 'center',
    padding: 20,
  },
  pageButton: {
    marginHorizontal: 5,
    padding: 10,
    backgroundColor: '#007BFF',
    borderRadius: 5,
  },
  pageButtonText: {
    color: '#fff',
    fontWeight: 'bold',
  },
});

export default commonStyles;
