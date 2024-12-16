import React from 'react'
import Navbar from './components/Navbar';
import Hero from './components/Hero';
import HomeCards from './components/HomeCards';
import JobListing from './components/JobListing';
import ViewJobs from './components/ViewJobs';
const App = () => {
    const names = ['John', 'Brian', 'Sara'];
    return (
        <>
            <Navbar></Navbar>
            <Hero
                title="Become a React Dev"
                subtitle="Find the React job that fits your skills and needs"
            ></Hero>
            <HomeCards></HomeCards>
            <JobListing></JobListing>
            <ViewJobs></ViewJobs>

        </>
    )
}

export default App
