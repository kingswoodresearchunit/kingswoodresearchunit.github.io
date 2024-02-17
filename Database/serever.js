const express = require('express');
const app = express();

// Simulating a database (replace this with your actual database connection)
const database = {
  getLatestRegistrationCode: async () => {
    return new Promise(resolve => {
      // Simulating an asynchronous database query with a timeout
      setTimeout(() => {
        // Assuming this function returns the latest registration code from the database
        resolve('PREVIOUSCODE99');
      }, 1000);
    });
  },
};

// Express route to handle the database query
app.get('/getLatestRegistrationCode', async (req, res) => {
  try {
    const latestCode = await database.getLatestRegistrationCode();
    res.json({ latestCode });
  } catch (error) {
    console.error(error);
    res.status(500).json({ error: 'Internal Server Error' });
  }
});

// Start the server
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server is running on http://localhost:${PORT}`);
});
