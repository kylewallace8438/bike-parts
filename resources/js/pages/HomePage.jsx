import React from 'react'
import Hero from '../components/Hero';
import HomeCards from '../components/HomeCards';
import JobListing from '../components/JobListing';
import ViewJobs from '../components/ViewJobs';
const HomePage = () => {
    return (
        <>
            <Hero
                title="Become a React Dev"
                subtitle="Find the React job that fits your skills and needs"
            ></Hero>
            <HomeCards></HomeCards>
            <JobListing limit={3}></JobListing>
            <ViewJobs></ViewJobs>

        </>
    )
}

export default HomePage
