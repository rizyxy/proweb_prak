function App() {
    const [cart, setCart] = useState([]);

    const addToCart = (item) => {
        setWishlist([...cart, {...item}]);
      };
}