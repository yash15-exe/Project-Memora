import express from "express"
import User from "../server/Models/userModel.js"
import bcrypt from "bcrypt"
import cors from "cors"
import bodyParser from "body-parser"

const app = express()

app.use(cors())

app.use(bodyParser.json());
const router = express.Router()

router.post("/register", async (req, res) => {

    

    
    try {
        
        const {email, password} = req.body;
        const isDupliEmail = await User.findOne({emails:email})


        if(isDupliEmail){
           return  res.status(400).send("User is already registered")
        }
        

        if(!isDupliEmail){

        const hashedPassword = await bcrypt.hash(password , 10)


        const user = new User({
            emails:email,
            hashedPassword:hashedPassword
        });
            
        await user.save()
      
        res.status(200).send("User registered successfully")
    }
       
    } catch (error) {
        res.status(500).send("User not registered due to server problem:"+ error)
    }
})

router.post("/login", async (req ,res) =>{
    try {
        const {email, password} = req.body

        const user = await User.findOne({emails:email})
            console.log(user);
        if(!user){
            return res.status(400).send("User dont exist with this email")
        }

        const validPassword = await bcrypt.compare(password, user.hashedPassword)

        if(!validPassword){
            return res.status(400).send("Password is Invalid")
        }
        res.status(400).send("User logged in successfully")
        //web token here

    } catch (error) {
        console.log(error);
        res.send("Something went wrong in login at server")
    }
})


export default router