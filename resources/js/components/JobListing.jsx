import React, { useEffect, useState } from 'react'
import Job from './Job'
const JobListing = ({ limit }) => {
    const [jobs, setJobs] = useState([])
    const [loading, setLoading] = useState(true)
    useEffect(() => {
        const fetchJobs = async () => {
            try {
                const response = await fetch('http://127.0.0.1:8000/api/jobs')
                const data = await response.json()
                setJobs(data)
            } catch (error) {
                console.error(error)
            } finally {
                setTimeout(() => {
                    setLoading(false)
                }, 1000)
            }
        }
        fetchJobs()
    }, [])
    return (
        <>
            <section className="bg-blue-50 px-4 py-10">
                <div className="container-xl lg:container m-auto">
                    <h2 className="text-3xl font-bold text-indigo-500 mb-6 text-center">
                        Browse Jobs
                    </h2>
                    {loading ? <h2>Loading</h2> : (
                        <>
                            <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
                                {jobs.map((job, index) => {
                                    return (
                                        <Job job={job} key={index}></Job>
                                    )
                                })}

                            </div>
                        </>
                    )}
                </div>
            </section>
        </>
    )
}

export default JobListing
