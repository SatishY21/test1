# YouTube Trending Video Analysis

This project performs an in-depth analysis of trending YouTube video data from 10 different countries. The goal is to uncover insights about what makes a video trend, analyze viewer sentiment, and identify top-performing channels and categories. The analysis covers data cleaning, sentiment analysis of comments, emoji frequency, and visualization of key metrics.

---

##  Key Questions Addressed

- What are the characteristics of trending videos (e.g., views vs. likes)?
- What is the overall sentiment of comments on trending videos?
- Which emojis are most frequently used in comments?
- Which channels and categories dominate the trending lists?
- How do trends vary across different countries?

---

## Datasets Used 📁

This analysis uses two main sets of data:

1.  **Trending YouTube Video Statistics**: A collection of `.csv` files, with each file representing daily trending video data from a specific country (US, GB, IN, CA, etc.). This data includes video titles, channel titles, publish dates, tags, and engagement stats like views, likes, dislikes, and comment counts.
2.  **Category ID JSON Files**: A `.json` file (`US_category_id.json`) that maps the `category_id` numbers from the dataset to their human-readable category names (e.g., '10' maps to 'Music').

---

## Analysis Workflow ⚙️

The project follows a structured data analysis workflow, which is detailed in the accompanying Jupyter Notebook (`Youtube.ipynb`).

### 1. Data Loading and Merging
- Reads 10 separate CSV files representing different countries.
- Combines them into a single, comprehensive pandas DataFrame.
- Loads the JSON category data to map category IDs to names.

### 2. Data Cleaning and Preparation
- Checks for and handles missing values (`.isnull()`, `.dropna()`).
- Removes duplicate rows to ensure data integrity (`.duplicated()`, `.drop_duplicates()`).
- Adds a `category_name` column by mapping `category_id` using the JSON data, making the dataset much more readable.

### 3. Exploratory Data Analysis (EDA)
- **Sentiment Analysis**:
    - Uses the `TextBlob` library to calculate the polarity (positive/negative score) for each comment in the `video_id_info.csv` dataset.
    - Visualizes the distribution of sentiments to understand overall audience reception.
- **Word Cloud Analysis**:
    - Generates word clouds from both positive and negative comments to visually identify the most frequently used words.
- **Emoji Analysis**:
    - Extracts all emojis from the comment text using the `emoji` library.
    - Uses `collections.Counter` to find the most common emojis.
    - Visualizes the top 10 most used emojis with an interactive bar chart using `Plotly`.
- **Correlation Analysis**:
    - Creates a heatmap with `seaborn` to visualize the correlation between numerical variables like `views`, `likes`, `dislikes`, and `comment_count`.
- **Channel Performance Analysis**:
    - Identifies the channels with the most trending videos using `value_counts()`.
    - Creates bar charts to visualize the top-performing channels.

---

## Key Findings 📈

- There is a **strong positive correlation** between views, likes, and comment counts, confirming that as a video gets more views, its engagement tends to increase proportionally.
- Sentiment analysis of comments shows a mix of positive and negative feedback, with a significant portion of comments being neutral.
- The most frequently used emojis are overwhelmingly positive, dominated by hearts, laughing faces, and clapping hands.
- A small number of high-profile channels (like *TheEllenShow*, *The Tonight Show*, and *Jimmy Kimmel Live*) are responsible for a large portion of the trending videos.

---

## How to Run This Project 🚀

To replicate this analysis, follow these steps:

1.  **Clone the Repository**:
    ```bash
    git clone [https://github.com/your-username/your-repository-name.git](https://github.com/your-username/your-repository-name.git)
    cd your-repository-name
    ```

2.  **Set up the Environment**:
    It is recommended to run the `Youtube.ipynb` notebook in Google Colab or a local Jupyter Notebook environment.

3.  **Install Dependencies**:
    Run the following commands in your notebook to install the necessary libraries:
    ```python
    !pip install textblob
    !pip install wordcloud
    !pip install emoji==2.10.1
    ```

4.  **Upload the Data**:
    - If using **Google Colab**, upload the `video_id_info.csv` file.
    - Create a zip file of your `YT_additional_data` folder, upload it, and unzip it using `!unzip YT_additional_data.zip`.

5.  **Run the Notebook**:
    Execute the cells in the `Youtube.ipynb` notebook sequentially to perform the analysis. Make sure to adjust the file paths in the notebook to match the Colab environment (e.g., `/content/YT_additional_data/`).
