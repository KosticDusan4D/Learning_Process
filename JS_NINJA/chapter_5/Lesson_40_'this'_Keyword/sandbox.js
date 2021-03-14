// object literals

let user = {
    name: 'crystal',
    age: 30,
    email: 'crystal@gmail.com',
    location: 'London',
    blogs: ['why mac & cheese rules', '10 things to make with marmite'],
    login: function(){
        console.log('the user logged in');
    },
    logout: function(){
        console.log('the user logged out');
    },
    logBlogs: function(){
        // console.log(this.blogs);
        console.log(`${this.name} has written the following blogs: `);
        this.blogs.forEach((blog, index) => {
            console.log(`${index}, ${blog}`);
        })
    }
};

user.login();
user.logout();
user.logBlogs();


