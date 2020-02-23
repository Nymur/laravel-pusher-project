import Token from './token'
import Storage from './storage'
class User{
	login(data){
		axios.post('/api/auth/login',data)
		.then(res => this.responseAfterLogin(res))
		.catch(error => console.log(error.response.data))
	}

	responseAfterLogin(res){
		const access_token = res.data.access_token
		const userName = res.data.user

		if(Token.isValid(access_token)){
			Storage.store(access_token,userName);
			window.location ="/forum";
		}
		return console.log(this.logedIn());
	}

	hasToken(){
		const storedToken = Storage.getToken();
		if(storedToken){
			return Token.isValid(storedToken) ? true:false
		}
		return false
	}

	logedIn(){
		return this.hasToken()
	}

	logOut(){
		 Storage.clear();
		 window.location = "/forum";
	}


}

export default new User()