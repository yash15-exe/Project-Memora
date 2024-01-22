import express from "express"
import mongoose from "mongoose"
import dotenv from "dotenv"
import routes from "../Server/routes.js"
import cors from "cors"
import bodyParser from "body-parser"
const app = express()
dotenv.config();
app.use(bodyParser.json())
app.use(cors())

  
mongoose.connect(process.env.MONGO_URL)
.then(() => {
    console.log("DB connected successfully");
}).catch((e) => {
    console.log("DB not connected, error: " + e);
})
app.use(express.json());
app.use(routes)

app.listen(process.env.PORT, () => {
    console.log(`Server listening on port ${process.env.PORT}`);
})


