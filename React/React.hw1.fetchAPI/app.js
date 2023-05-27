import axios from "axios";

async function getData(id) {
  const { data: user } = await axios(`https://jsonplaceholder.typicode.com/users/${id}`);
  console.log("users: ", user);

  const { data: post } = await axios(`https://jsonplaceholder.typicode.com/posts?id=${id}`);
  console.log("posts: ", post);
}

export default getData;
