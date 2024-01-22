import mongoose from "mongoose"

const userSchema = new mongoose.Schema({
    emails:{
        type:String,
        required:true,
        
    },
    hashedPassword:{
        type:String,
        required:true,
    }
})

export default  mongoose.model("User", userSchema)